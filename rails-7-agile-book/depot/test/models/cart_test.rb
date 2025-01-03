#---
# Excerpted from "Agile Web Development with Rails 7",
# published by The Pragmatic Bookshelf.
# Copyrights apply to this code. It may not be used to create training material,
# courses, books, articles, and the like. Contact us if you are in doubt.
# We make no guarantees that this code is fit for any purpose.
# Visit https://pragprog.com/titles/rails7 for more book information.
#---
require 'test_helper'

class CartTest < ActiveSupport::TestCase
  test "add unique products" do
    cart = Cart.create
    book_one = products(:one)
    book_two  = products(:two)
    cart.add_product(book_one).save!
    cart.add_product(book_two).save!
    assert_equal 2, cart.line_items.size
    assert_equal book_one.price + book_two.price, cart.total_price
  end
  
  test "add_duplicate_product" do
    cart = Cart.create
    ruby_book = products(:ruby)
    cart.add_product(ruby_book).save!
    cart.add_product(ruby_book).save!
    assert_equal 2*ruby_book.price, cart.total_price
    assert_equal 1, cart.line_items.size
    assert_equal 2, cart.line_items[0].quantity
  end 
end
