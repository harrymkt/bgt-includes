# announcement

This class, called the "Announcement" class, enables you to incorporate recent and significant announcements into your game. To utilize this feature, create a folder named "announcements" where you can store the relevant announcement files.

# announcement object properties
variable | description
---|---
(pyear) (pmonth) (pday) (phour) (pminute) (psecond) | the published date of the announcement. pyear is the year, pmonth is the month(from 1 to 12), pday is the day(from 1 to 31), phour is the hour(from 0 to 23), pminute is the minute(from 0 to 59), psecond is the second(from 0 to 59).

(lyear) (lmonth) (lday) (lhour) (lminute) (lsecond) | the last modified date. lyear is the year, lmonth is the month(from 1 to 12), lday is the day(from 1 to 31), lhour is the hour(from 0 to 23), lminute is the minute(from 0 to 59), lsecond is the second(from 0 to 59).

title | the title name of the announcement

text | the announcement's text

# methods

## announcement_exists

this function returns the position of the announcement If exists.

`double announcement_exists(string titlename)`

### parameters
var | about
---|---
titlename | the name you wish to check, If it exists.

### return value

the position of the announcement title If it exists on success, -1 on failure.

### remarks

this function returns the position index of the announcement title


## add

this function adds a specify announcement to the array.

`bool add_announcement(double py,double pm,double pd,double ph,double pmn,double ps,double ly,double lm,double ld,double lh,double lmn,double ls,string tt,string at,double per)`

###parameters
var | about
---|---
py | the published year.
pm | the published month.
pd | the published day.
ph | the published hour
pmn | the published minute.
ps | the published second.
ly | the last modified year.
lm | the last modified month.
ld | the last modified day.
lh | the last modified hour
lmn | the last modified minute.
ls | the last modified second.
tt | the title of the announcement.
at | the text of the announcement.
per | a specify position of which the announcement should be added. default is -1, which means that the announcement will be added at last.

### return value

true on If the announcement has been added successfully, or false on If the announcement could not be added or the name of the announcement already exists.

### remarks

this function adds a specify announcement to the announcements along with a title and the text.

when adding an announcement, be sure to have different titles. If the announcement with the title already exists it will be failed. though it isn't return you with the runtime errors, the announcement will not be added and will return false.


## remove_announcement

this function removes a specify announcement with the title.

`bool remove_announcement(string title_to_remove)`

### parameters
var | about
---|---
title_to_remove | the title to be removed.

### return value

true on If that was removed, false otherwise.

### remarks

this function removes announcement by specifying only the title name. be sure that the announcement you want to remove exists. otherwise, the announcement will not be able to remove since it isn't exist. you can load all the announcements using "load_announcements" function.


## save_announcements

this function saves all the announcements from the object.

`bool save_announcements()`

### parameters

none

### return value

true on If they were saved successfully, or false on when no announcements exist.

### remarks

The purpose of this function is to save all the announcements from the announcement object. It is recommended to use this function when your script ends or when collecting announcements to load them the next time the script runs. However, if the array does not contain any announcements, it will not be saved to avoid unnecessary storage. This approach ensures that only relevant and non-empty data is stored, optimizing the saving process.
