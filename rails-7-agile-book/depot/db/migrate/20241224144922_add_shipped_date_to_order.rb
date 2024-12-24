class AddShippedDateToOrder < ActiveRecord::Migration[7.0]
  def change
    add_column :orders, :shipped_date, :date
  end
end
