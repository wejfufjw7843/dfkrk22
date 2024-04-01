<?php
def sum_numbers(*numbers):
    """Возвращает сумму переданных чисел."""
    total = 0
    for number in numbers:
        total += number
    return total


# Тестируем функцию, передавая разное количество аргументов
print(sum_numbers())  # Выведет 0
print(sum_numbers(1))  # Выведет 1
print(sum_numbers(1, 2))  # Выведет 3
print(sum_numbers(1, 2, 3))  # Выведет 6
print(sum_numbers(1, 2, 3, 4))  # Выведет 10
?>