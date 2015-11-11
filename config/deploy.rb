# config valid only for current version of Capistrano
lock '3.4.0'

set :application, 'portfolio'
set :repo_url, 'git@github.com:chalasr/sfPortfolio.git'
set :ssh_user, "chalas_r"
set :format, :pretty
set :log_level, :info
set :stage, "production"
# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp
set :deploy_to,   "/var/www/html/projects/Portfolio"
set :branch, "master"
set :model_manager, "doctrine"
set :pty, true

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, '/var/www/my_app_name'

# Default value for :scm is :git
set :scm, :git

set :symfony_env, "prod"
set :app_path, "app"
set :web_path, "web"
set :log_path, fetch(:app_path) + "/logs"
set :cache_path, fetch(:app_path) + "/cache"
set :app_config_path, fetch(:app_path) + "/config"
set :use_sudo, true
set :permission_method, :chmod
set :use_set_permissions, true
set :writable_dirs, ["app/cache", "app/logs"]

set :linked_dirs, %w{app/logs}
set :keep_releases, 3

# Permissions
set :file_permissions_paths, [fetch(:log_path), fetch(:cache_path)]
set :file_permissions_users, ['www-data']
set :webserver_user, "www-data"

# Assets
set :assets_install_path, fetch(:web_path)
set :assets_install_flags, '--symlink'

namespace :deploy do
  task :check_permissions do
    on roles(:web) do
      execute "chmod -R 0777 #{release_path}/app/cache"
      execute "echo 'finished'"
    end
  end
end

after "deploy:finishing", "deploy:check_permissions"
after "deploy:check_permissions", "deploy:finished"
