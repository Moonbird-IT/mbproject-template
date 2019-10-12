# mbproject-template

This git can be used to set up an empty mbFramework-based project. It includes minimal functionality to check if the project has been set up correctly and it is safe to use the included components after functionality has been checked.

### Clone the repository

Clone the git repository into a directory of your choice.

### Setting it up

Set up a virtual directory inside your webserver that uses the "public" directory as its home directory.

Sample for Apache: 

    Alias "/myproject" "D:\projects\myproject\public"

### Launch a web browser and check functionality

Open up your browser and launch (if using "myproject" as Alias and localhost for development):

http://localhost/myproject/

You should see two regions containing some sample data. It's now safe to remove the sample controller, view, backend and model.

### Usage hints

More in-depth information about how to use the framework can be found in the README.md of the mbFramework.