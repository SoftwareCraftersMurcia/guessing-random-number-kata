from python.src.main import MainClass

def test_given_a_number_always_is_true():
    # given
    number = 5

    # when
    result = MainClass.main_function(number)

    # then
    assert result == "WIN"
