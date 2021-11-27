## Internet Technologies Project - 2021
# Vaishnavi Raghavajosyula - 19MCME03

## The main page that will take you through the whole project is **_homepage.html_**
The output_screenprints.pdf contains the screenprints and execution of this entire project.

#### The folders contain the codes for:
    - "library" for Library Management
    - "hostel" for Hostel Management 
    - "tutoring_vids" for Online Video tutuoring Scripts 

I have used properties of **WAMP** to create this project.

Most of the **style** throughout the project uses the file _mystyle.css_, but each sub bit does have it's own seperate style in each sub folder.

Each **javascript validation** is mostly embeded into the php/html files. Some of the validation also happens through PHP and **DOM** elements of input in HTML. 

I have used **PHP validation, JS validation, MySql** for database storage, **Sessions and cookies** throughout the ENTIRE project.




## Library Management
This application will have two user types, ADMIN and student. 
There will be one default **ADMIN** who can -
- Add a student user
- Delete a student user
- Add a book to library 
- Delete a Book from library
- Issue a book to a student
- Return a book from student 
- Log in and out of **sessions**

And also a **STUDENT USER** who can - 
-  See the books borrowed under his/her account
-  Search for the existance of a book via:
    - the title of the book,
    - the authors name
    - the ISBN number of the book
- Log in and out of **sessions**

The users can browse between these functions that they have freely. Since I have implemented different login pages for the each type of users, once logged into a session, and without logging out if a user tries to log in again, it will redirect to the logged in page for sure

There will be **login validations**, **input validations** and **hashing** and storing of passwords for all these. 
The subfunctions are all unaccessible unless logged in and the standard **cookie** time (for a person to be logged in without clicking log out) is 1 hour. 

## Hostel Management
This application too will have two user types, ADMIN and student.
The **ADMIN** will again will be a single default user who can:
- Add a student user
- Add a room to the hostel directory
- Delete a room from the hostel directory
- Check the unallocated rooms in the hostel directory
- Allocate a room to a student
- Check the allocated rooms in the hostel directory
- Deallocate a room 
- Log in and out of **sessions**

The **STUDENT USER** can - 
-  See the status of hostel if alloted / if not alloted
- Log in and out of **sessions**

The users can browse between these functions that they have freely.

There will be **login validations**, **input validations** and **hashing** and storing of passwords for all these. 
The subfunctions are all unaccessible unless logged in and the standard **cookie** time (for a person to be logged in without clicking log out) is 1 hour.


## Online Video Tutoring Scripts
This will be a HTML file filled with lots of **interactive DOM (CSS)**, that will list out the classes of this semester in the form of **embedded** Youtube Video links (using **iframes**). 
I have added a **collapsable hamburger courses menu** list to take you to each topic, and you can scroll down to see the classes from there on.

Each course has it's own internal link and you can navigate between the courses this way. The way you have to add to the page is a crude method. In the */tutoring_vids/codes_for_adding_new_elements.html* file you can see the codes to copy, paste and edit to add either
1. A new course 
2. A new class to an existsing course.

In the HTML page that will be linked, I have very marked the places to add these. In 3 places -
1. In the courses side menu list, you must create a new link upon adding a new course
2. At the end of all the existing courses can you add a new course code block
3. At the end of each existing class link can you add a new class code block.

Every instruction is clearly mentioned within the two files.


