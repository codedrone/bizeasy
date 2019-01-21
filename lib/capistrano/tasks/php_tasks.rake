namespace :php_task do
    desc 'Set file permission.'
        task :permission  do
            on roles(:app) do
                within "/var/www/html/bizeazy-web/current/application/views/" do
                execute 'chmod', '-R', '777', 'templates_c'
            end
        end
    end

    desc 'Generate Migrations.'
        task :migration  do
            on roles(:app) do
                within "/var/www/html/bizeazy-web/current/" do
                execute 'php', 'index.php', 'Tools', 'migrate'
            end
        end
    end

    desc 'Delete Database.'
        task :dropDatabase  do
            on roles(:app) do
                within "/var/www/html/bizeazy-web/current/" do
                execute 'php', 'index.php', 'Tools', 'dropDatabase' ,'bizeazy'
            end
        end
    end
    
    desc 'Run administratorsSeeder.'
        task :seeder  do  
            on roles(:app) do
                within "/var/www/html/bizeazy-web/current/" do
                    # execute 'php', 'index.php', 'Tools', 'AdministratorsSeeder'
                    execute 'php', 'index.php', 'Tools', 'CmsSeeder'
                    execute 'php', 'index.php', 'Tools', 'ConfigurationSeeder'
                    execute 'php', 'index.php', 'Tools', 'EmailTemplateSeeder'
                    execute 'php', 'index.php', 'Tools', 'FaqSeeder'
                    execute 'php', 'index.php', 'Tools', 'OptionsSeeder'
                    execute 'php', 'index.php', 'Tools', 'PostmetaSeeder'
                    execute 'php', 'index.php', 'Tools', 'postsSeeder'
                    execute 'php', 'index.php', 'Tools', 'TermRelationshipsSeeder'
                    execute 'php', 'index.php', 'Tools', 'TermsSeeder'
                    execute 'php', 'index.php', 'Tools', 'TermTaxonomySeeder'
                    execute 'php', 'index.php', 'Tools', 'UsermetaSeeder'
                    execute 'php', 'index.php', 'Tools', 'UsersSeeder'

                
            end
        end
    end
    

    desc "Create database and database user."
    task :database do
        ask :db_root_password, ''
        ask :db_name, ''
        ask :db_user, ''
        ask :db_pass, ''

        on roles(:web) do |host|
            execute "mysql --user=root --password=#{fetch(:db_root_password)} -e \"CREATE DATABASE IF NOT EXISTS #{fetch(:db_name)}\""
            execute "mysql --user=root --password=#{fetch(:db_root_password)} -e \"GRANT ALL PRIVILEGES ON #{fetch(:db_name)}.* TO '#{fetch(:db_user)}'@'localhost' IDENTIFIED BY '#{fetch(:db_pass)}' WITH GRANT OPTION\""
        end
    end

    desc "changing the sql mode."
    task :sql_mode do
        ask :db_root_password, ''
        ask :db_name, ''
        ask :db_user, ''
        ask :db_pass, ''

        on roles(:web) do |host|
            execute "mysql --user=root --password=#{fetch(:db_root_password)} -e \"SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));\""
         
        end
    end
end