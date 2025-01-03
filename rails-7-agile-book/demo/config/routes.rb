Rails.application.routes.draw do
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Defines the root path route ("/")
  # root "articles#index"

  get "/say/hello", to: "say#hello"
  get "/say/goodbye", to: "say#goodbye"
end
