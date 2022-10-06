from src.main import MainClass

def test_guessing_a_number_the_player_should_win():
    # given
    number = 3

    # when
    result = MainClass.main_function(number)

    # then
    assert result == "WIN"

def test_given_a_higher_number_than_expected_should_return_lower():
    # given
    number = 5

    # when
    result = MainClass.main_function(number)

    # then
    assert result == "LOWER"


def test_given_a_lower_number_than_expected_should_return_higher():
    # given
    number = 1

    # when
    result = MainClass.main_function(number)

    # then
    assert result == "HIGHER"


