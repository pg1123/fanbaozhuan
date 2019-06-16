<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'fanbaozhuan.test');

// Project repository
set('repository', 'https://github.com/pg1123/fanbaozhuan.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('prod')
    ->hostname('fanbaozhuan.com')
    ->user('www-data')
    ->set('deploy_path', '/var/www/fanbaozhuan.test');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

