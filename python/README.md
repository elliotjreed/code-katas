# Python

## Getting Started

Python 3 or above and Pip (3) are required to be installed on your system.


### Installing Pip

For instructions on how to install Pip visit [packaging.python.org](https://packaging.python.org/tutorials/installing-packages/).


### Installing Dependencies

After cloning this repository, change into the `python` directory and run

```bash
pip install -r requirements.tx

This will install all dependencies needed for the project.


## Running

To run the test suite from the `python` directory, first change directory to the module (eg. `cd RomanNumerals`), then:

```bash
python3 -m unittest roman_numerals_test
```

To run the code coverage tool:

```bash
coverage run roman_numerals_test.py
coverage report -m
```
