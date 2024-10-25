import math

def calculate_circle_properties(diameter):
    radius = diameter / 2
    area = math.pi * (radius ** 2)
    circumference = 2 * math.pi * radius
    return area, circumference

# Get user input
diameter = float(input("Enter the diameter of the circle: "))

# Calculate area and circumference
area, circumference = calculate_circle_properties(diameter)

# Display the results
print(f"Area: {area:.2f}")
print(f"Circumference: {circumference:.2f}")
