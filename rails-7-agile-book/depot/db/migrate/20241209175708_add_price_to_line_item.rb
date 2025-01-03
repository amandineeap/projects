class AddPriceToLineItem < ActiveRecord::Migration[7.0]
  def change
    add_column :line_items, :price, :decimal

    LineItem.all.each do |line_item| 
      line_item.price = line_item.product.price
      line_item.save!
    end
  end
end
