class UpdatePayTypeToInteger < ActiveRecord::Migration[7.0]
  def change
    change_column :orders, :pay_type, :integer
  end
end
