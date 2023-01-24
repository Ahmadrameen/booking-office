
# Office Booking System

This is a simple PHP script that allows users to check the availability of an office and book it at a certain time. It also sends a notification to the person who occupies it with the date, time, and office number.

## Requirements

-   PHP 7 or higher
-   MySQL or compatible database

## Installation

1.  Clone or download the repository.
2.  Create a new database and import the `database.sql` file to create the necessary tables.
3.  Open the `config.php` file and enter your database credentials.
4.  Run the script on your server.

## Usage

The script can be accessed by navigating to the file location on your server.

1.  To check if an office is free at a certain time, enter the office number and the time in the appropriate fields.
2.  To book an office, enter the required information (occupant name, email, phone, start time, and end time) and submit the form.
3.  If the office is occupied, the script will display the name of the occupant and the end time of the booking.

## Note

-   Make sure to use the same format of time and date in your database as the script is using.
-   The script uses the built-in `mail()` function for sending emails, you may use other libraries like PHPMailer for sending emails.

## Follow PSR recommendations

This script follows the PSR recommendations for PHP coding standards. You can find more information about PSR recommendations at [https://www.php-fig.org/psr/](https://www.php-fig.org/psr/)

## Contributing

If you find any bugs or have any suggestions for improvements, please feel free to create a pull request or open an issue.
