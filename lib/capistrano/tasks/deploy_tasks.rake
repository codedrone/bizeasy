namespace :deploy do
	desc 'Notify slack start of deployment'
	task :deploy_start do
		set :time_started, Time.now.to_i
		fetch(:slack_client).ping '', attachments: [{
		  fallback: "#{fetch(:slack_user)} starting a deploy. Stage: #{fetch(:stage)} "\
			"Revision/Branch: #{fetch(:current_revision, fetch(:branch))} "\
			"App: #{fetch(:application)}",
		  title: "Deployment Starting",
		  color: "#F35A00",
		  fields: [
			{
			  title: "User",
			  value: "#{fetch(:slack_user)}",
			  short: true
			},
			{
			  title: "Stage",
			  value: "#{fetch(:stage)}",
			  short: true
			},
			{
			  title: "Revision/Branch",
			  value: "#{fetch(:current_revision, fetch(:branch))}",
			  short: true
			},
			{
			  title: "Application",
			  value: "#{fetch(:application)}",
			  short: true
			}
		  ]
		}]
	end
end