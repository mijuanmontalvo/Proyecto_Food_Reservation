Create a markdown file titled "deploy-instructions.md" and add it to your semester project repository.

You'll use this file to record instructions to yourself for your final milestone.  Keep notes on each step below, including any extra detail you think is necessary to help you repeat this process.

Now you're going to modify your local code to get it ready to deploy on AWS.  Note: you'll have the option of either creating a DGL 123 subdomain on AWS and creating subfolders for milestone 3 and 4, OR, creating a DGL 123 folder and subfolders within it for milestones 3 and 4.  These instructions are for the subfolders alternative.  The linked instructions in this folder show you how to create a higher level subdomain.  You may choose either method.

Create a dgl123 project in your htdocs folder (in your Apache document root)

Move your semester project into the dgl123 folder and reconnect Github Desktop to it.

Using Github, create a branch for your Milestone 3, which you'll use to modify your code for deployment. 

Identify your Milestone 3 git commit.  This will be your starting point.
Create a new branch called "deploym3" from your Milestone 3 commit.  See the Github instructions on how to do this here (you're looking for "branch from a previous commit") : https://docs.github.com/en/desktop/making-changes-in-a-branch/managing-branches-in-github-desktop
Switch to your new branch using Github Desktop and open this code in VS Code.

Adapt your project to the folder structure
If you've used a version of the router code from Laracasts, you'll need to adjust your httpd.conf, routes, and navigation partials (you'll need to make similar modifications if you've gone a different way).
See Slack for examples of how to do this
Make sure your code works with the new folder structure

Move your data to AWS

Using phpMyAdmin on the computer you've done your semester project development work on, export your semester project database.
Make a note of your database name -- we're going to use that in a moment.

Using cPanel, upload your SQL file to your account on the department's AWS server.
Create a new database, using the name of your Milestone 3 database as a prefix, but add "m3" onto the name (so "mydb" would become "mydbm3").
Import the SQL file into your database.
Now set up your folder structure on AWS:
Using the cPanel file tools, create a dgl123 folder in your public directory.
Create a subfolder for your project, using your original folder name for your project (or "semproj-m3" if you worked out of your document root).
Move your code to AWS
Extract a zipped copy of your (working) code corresponding to your Milestone 3 submission as adapted on the "deploym3" branch.
Note that you're not cloning a repository, but just getting a copy of the code.
You'll need to change your database configuration in your PHP source to match the "m3" suffix on your database.
Test your website on AWS, taking a screenshot of it on the imgd.ca domain.
Push the image to your repository!
