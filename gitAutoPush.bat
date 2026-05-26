:: Auto push script: /e:/composer inst/gestNotes/autoPush.bat

:: Stage all changes in the working directory for commit
git add .

:: Create a commit with a fixed message (will fail if there are no staged changes)
git commit -m "Auto push changes %date% %time%"

:: Fetch latest changes from origin/main into the local repository (does not modify working tree)
git fetch origin main

:: Merge fetched origin/main into the current branch (may produce conflicts)
git merge origin/main

:: Pull (fetch + merge) from origin/main — redundant after fetch+merge but included here
git pull origin main

:: Push local commits to the origin main branch
git push origin main

:: Pause the script and wait for a key press so the console stays open
pause