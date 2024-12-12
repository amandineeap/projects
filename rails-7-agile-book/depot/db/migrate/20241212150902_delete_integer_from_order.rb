class DeleteIntegerFromOrder < ActiveRecord::Migration[7.0]
  def change
    remove_column :orders, :integer
  end
end
