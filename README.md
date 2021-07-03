# Emojify


Table Of Contents:
______________________________________
1.About Project.

2.Purpose of project

3.Dataset

4.Database

5.Required software files list

6.Project files

7.Usage(Steps for project execution)

8.Project github link
_______________________________________
1.About Project:

     In this project,we are going to analyze the student emotions in online platforms and also we are authenticating 
     verified student only attending and give their emotion percentage and attended time to authority.
_______________________________________
2.Purpose of project:

        Due to pandemic, everything has turned to online .So at this time most of the schools,colleges  conducting 
        online classes.At this time,making students to listen to the class is a major concern so if we try to analyse 
        the emotions(which describe their attentiveness) and also validating that the registered person only listen
        to the class.This  will useful in various online e-learning platforms also.
______________________________________________
3.Dataset:

      i)For facial expression recognition:
      Can have dataset either by
      we can download the dataset from kaggle repository.The guidelines will be present in
       "IVCSE_2021_B8\Dataset\DatasetDownload guidelines" OR can have the zip folder which
         is present in "IVCSE_2021_B8\Dataset\dataset.zip"
         
      ii)For Facial verification:
         copy and paste the "IVCSE_2021_B8\Dataset\vgg_face_weights.h5" 
         in c:/users/(lenovo or username)/.deepface /weights
         (* which should be pasted after allsoftware installations) 
_______________________________________________
4.Database:

       To know about the database design see in "IVCSE_2021_B8\database\design.png".
_______________________________________________
5.Required softwares list:

       we require different softwares for the project:
        i)Jupyter notebook(For model development)
         you can download the notebook from "IVCSE_2021_B8\software\jupyter guidelines"
         
        ii)Mysql 5.5 command client App(For database)
         you can download the notebook from "IVCSE_2021_B8\software\mysql guidelines"
__________________________________________
6.Project files:

    you can find source file from "IVCSE_2021_B8\source\Emojify.ipynb"
___________________________________________
7.Usage:

    i)Firstly install jupyter notebook with help of "IVCSE_2021_B8\software\jupyter guidelines"
    
    ii)In search bar,Type Anaconda prompt(run as administrator) and run the below commands one after the other finishing
           a.pip install keras
           b.pip install tensorflow
           c.pip install mysql
           d.pip install mysql-connector
           e.pip install deepface
           f.pip install opencv-python
           g.pip install opencv-contrib-python
           h.pip install flask
           i.pip install flask_session
       close anaconda prompt after finishing of excution.
       
      iii)Now create a path in device for saving the below files in that path 
             EX:C:\Users\Lenovo\Documents\PROJECT
            (create project document in documents folder and upload below files)
           a.copy paste static and temp folders in that path which are available in "IVCSE_2021_B8\source"
           b.copy paste the dataset from "Dataset/dataset.zip" and extract there it results in train and test folders
           
     iv)Now copy and paste the "IVCSE_2021_B8\Dataset\vgg_face_weights.h5" 
          in  "c:/users/(lenovo or username)/.deepface /weights" path
      v)Install mysql with help of "IVCSE_2021_B8\software\mysql guidelines"(while installing keep root as password)
      
       vi)Now type  mysql5.5 command client app in search bar and app will be opened.Enterpassword as root.now
           write below commands in that 
              a.create database splatz;
              b.use splatz;
              c.CREATE TABLE student(Id INTEGER PRIMARY KEY, Name VARCHAR(20),Imagepath varchar(255),Password VARCHAR(20))
              d.create table exam(name varchar(25),quiz varchar(25),angry float,disgust float,fear float,happy float,neutral float,sad float,surprise float,Emotion varchar(25),attended varchar(25));
              e.create table history(name varchar(25),topic varchar(25),angry float,disgust float,fear float,happy float,neutral float,sad float,surprise float,Emotion varchar(25),attended varchar(25),present varchar(25));
          close the mysql app after finishing of execution
          
       vi)open jupyter notebook and upload below files(in home page of jupyter book)
            a.casacade file from  "IVCSE_2021_B8\software\haarcascade_frontalface_default.xml"
            b.source file from "IVCSE_2021_B8\source\Emojify.ipynb"
            
      vii)Now click on Emojify.ipynb in home page of jupyter notebook then file opens.
           In second cell enter cd "your path" ( path you created in step III for storing files).
           EX:cd "C:\Users\Lenovo\Documents\PROJECT"
           In fourth cell(box)please find these two instructions
                          img1 = cv2.imread(r"C:\Users\Lenovo\Documents\PROJECT\static\UserImages"+"/"+pat)
                          img2 = cv2.imread(r"C:\Users\Lenovo\Documents\PROJECT\img2.jpg")
          and change these according to the path you have created for img1 it should be navigate to UserImages in staticfolder
          and for img2 it should be in project folder(where all static files and template files reside).
          
     viii)Now after doing these changes now run cell by cell and at last cell you will get link in ouput and after clicking on link
            it will navigate you to the flask website.
            
      ix)In student login we can see learn  in which we have topic if selected redirects to a video page.
       click on start recording button starts webcam when we press q webcam stops and redirects to previous page.
        Same with exam , in that we have a random quizsame process applies to it also.
        
      x) In admin login, in which you can see registered student emotion percentages in exam and learning.can also register student.
        while registering a student make sure that you have to upload image in your  "static/UserImages" and write the 
         name with its extension in image path.
         EX:(Imagepath)bhanu.jpg
         
       xi)And project execution complete.
_____________________________________________________________
  8.Project github link:
      https://github.com/FINAL-YEAR-PROJECT-SVECW-B8/Emojify.git

 
       
        



 
