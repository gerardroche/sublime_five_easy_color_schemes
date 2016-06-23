COLOR TEST "Packages/five_easy_color_schemes/Monokai (Dark).tmTheme" "Ruby"

      g = Greeter.new('hello')
# ^ fg=#f8f8f2 bg=#272822 fs=

# The Greeter class
class Greeter
  def initialize(name)
    @name = name.capitalize
  end

  def salute
    puts "Hello #{@name}!"
  end
end

g = Greeter.new("world")
g.salute
