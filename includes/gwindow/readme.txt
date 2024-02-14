hahaha, welcome back to harry min khant. in this class, we made window functions useable for you or for have fun.
the function includes alert, show_game_window, and more. in the class, some of them are different.

gwindow() properties:
{
window_title: a string variable that returns the title of the previous window that was shown or initialized using the show() or initialise() methods. Please note that this function may not work with the default show_game_window function.
tl_path : the path for the terlark.
}

If the function has one or more same functionality, they will be seperet by 2 verticle bars, that is to say (||) character.
note: some functions require dat/dll files, that are listed in the libs folder.

bool show(string t) || bool initialise(string t)
these 2 functions allows you to show the game window. there is internal variable which inserts the title of the window If you use these 2 functions, and you can then return the value of the window title by using its variable.


bool hide()
this allows you to hide the window. you can then use the show or the initialise function with the variable window_title to show it back.

bool is_focused_window()
this checks whether the game window is currently in focus or not.

string input(string title,string text,string deftext)
same as the input_box(string,string,(optional string)

bool admin()
returns true If in admin mode, false otherwise.

bool print(string title,string t) || 
this prints the title and a text.

void message(string title,string message)
this prints as the above function, but use with library.

void sleep(double ms)
this function waits for a specified millisecond. it is useful to prevent consuming CPU as much as possible. the default is 5, meaning it is good to prevent the CPU load. this pauses your script for a certain amount of millisecond including checking keyboard and doing actions within the script, and it is thus not adviseable to use longer where your script needs to be responsive. If you failed to do this, the CPU will consume 100 percent at all time, and most laptops may ran out of responsives. usually this function with the 5 milliseconds default, should be used in loops

double rand(double from,double to)
this function generates the random number from a starting range to the end range.

void close_program()
this function closes the script completely, with resetting all values of the gwindow.

bool execute(string filename, string command_line, bool wait_for_completion, bool background)
same as run function.

int tl_alert(string title, string text, bool allow_cancel=false)
displays a message alert with an ok button, also the cancel button, asuming you have the bool parameter true. requires terlark.dat

int tl_information(string title, string text, bool allow_cancel=false)
shows an information message with ok and cancel buttons asuming you have the cancel allow true. requires terlark.

int tl_question(string title, string text, bool allow_cancel=false)
requires terlark, it allows you to ask questions visibly with yes&no buttons, and optionally cancel button.

int tl_error(string title, string text, bool allow_cancel=false)
requires terlark, it allows you to display error message.

int tl_critical(string title, string text, bool allow_cancel=false)
requires terlark, shows the message criticaly.

int tl_failure(string title, string text, bool allow_ignore=true)
shows the failure message, requires terlark