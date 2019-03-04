<style type="text/css">
    .sorted_table {
    i.icon.move-handler {
        cursor: move !important;
    }
    tr.placeholder {
      display: block;
      background: red;
      position: relative;
      margin: 0;
      padding: 0;
      border: none;
    }
    tr.placeholder:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 5px solid transparent;
        border-left-color: red;
        margin-top: -5px;
        left: -5px;
        border-right: none;
    }
}

.dragged {
  position: absolute;
  opacity: 0.9;
  z-index: 2000;
}
</style>
<div class="box">
    @if(isset($title))
    <div class="box-header with-border">
        <h3 class="box-title"> {{ $title }}</h3>
    </div>
    @endif

    @if ( $grid->allowTools() || $grid->allowExport() || $grid->allowCreation() )
    <div class="box-header with-border">
        <div class="pull-right">
            {!! $grid->renderExportButton() !!}
            {!! $grid->renderCreateButton() !!}
        </div>
        @if ( $grid->allowTools() )
        <span>
            {!! $grid->renderHeaderTools() !!}
        </span>
        @endif
    </div>
    @endif

    {!! $grid->renderFilter() !!}

    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover sorted_table">
            <thead>
                <tr>
                    @foreach($grid->columns() as $column)
                    <th>{{$column->getLabel()}}{!! $column->sorter() !!}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach($grid->rows() as $row)
                <tr {!! $row->getRowAttributes() !!} data-itemId="{{ $row->position }}" >
                    @foreach($grid->columnNames as $name)
                    <td {!! $row->getColumnAttributes($name) !!}>
                        {!! $row->column($name) !!}
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {!! $grid->renderFooter() !!}

    <div class="box-footer clearfix">
        {!! $grid->paginator() !!}
    </div>
    <!-- /.box-body -->
</div>
<script type="text/javascript" src="{{ asset('js/jquery-sortable.js') }}"></script>
<script type="text/javascript">
    var changePosition = function(requestData){

        requestData._token = '{{ csrf_token() }}';
        $.ajax({
            'url': '{{ route('apps.sort') }}',
            'type': 'POST',
            'data': requestData,
            'success': function(data) {
                if (data.success) {
                    console.log('success');
                } else {
                    console.log('some logic error');
                }
            },
            'error': function(){
                console.log('Request error');
            }
        });
    };

    $('.sorted_table').sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>',
        onDrop: function  ($item, container, _super) {

            $item.removeClass(container.group.options.draggedClass).removeAttr("style")
            $("body").removeClass(container.group.options.bodyClass)

            var $previous = $item.prev();
            var $next = $item.next();

            console.log( '$previous.length: ' + $previous.length);
            console.log( '$next.length: ' + $next.length);

            console.log( '$item: ' + $item.data('itemid'));
            console.log( '$previous: ' + $previous.data('itemid'));
            console.log( '$next: ' + $next.data('itemid'));

            if ($previous.length > 0) {
                 console.log(111111);
                changePosition({
                    type: 'moveAfter',
                    id: $item.data('itemid'),
                    positionEntityId: $previous.data('itemid')
                });
                //http://fanbaozhuan.local/admin/sort?type=moveAfter&id=1&positionEntityId=6
            } else if ($next.length > 0) {
                console.log(22222);
                changePosition({
                    type: 'moveBefore',
                    id: $item.data('itemid'),
                    positionEntityId: $next.data('itemid')
                });
            } else {
                console.log(33333);
                console.log('something wrong');
            }
        }
    });
</script>