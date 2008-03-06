#!/home/bin/env ruby

require 'rubygems'

# In case we haven't upgraded Rubygems yet
unless Kernel.respond_to?(:gem)
  def gem(*args)
    require_gem(*args)
  end
end

gem 'rack'
require 'rack'

require 'vanilla/rack_app'

# How to get this working?
# Rack::Static, :urls => ["/public"], :root => "vanilla"
Rack::Handler::FastCGI.run Vanilla::RackApp.new
