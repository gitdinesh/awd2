# GIT 

## ADD EXISTING PROJECT TO THE GIT
If you have existing project that need to configure with git, use following commands

	1) git init //initialize project 

	2) git checkout -b <BRANCH NAME> // Create new branch
	
	3) git add <FILE NAME> // If you need to add all files use . "dot" 
	
	4) git commit -a // Add comment regarding  your changes

	5) git remote add origin <GIT REPO URL>
	
	6) git push origin <BRANCH NAME>
	
	
Once you do the changes to the project you need to commit and push to the remote branch.
You do not need to follow all the steps mentioned above.

## GET REMOTE BRANCHES TO LOCAL
If you want to get all the branches listed in remote repository, you can use fetch command as follows

	git fetch origin
	git checkout <BRANCH NAME>
	
## LIST LOCAL GIT BRANCHES 
list existing branches in local repository
	
	git branch

## REMOVE BRANCHES
When you want to remove branches from the git you can use below commands. There are 2 step while removing branches 
### 1) Remove branch from local repo
Remove local branch 	
	
	git branch -d <BRANCH NAME>
	
### 2) Remove branch from origin   
push removed branch to origin so then git server can remove that branch from remote
	
 	git branch --delete --remotes origin/<BRANCH NAME>
	git branch -dr  origin/<BRANCH NAME>

## MERGE FILES IN 

while your in child branch, run following commands
	
	git merge <PARENT BRANCH NAME>

Before you merge make sure to commit changes in parent branch



