# File Handling  Reading and Writing
## File Reading
We can open a file using fopen() function. It needs two arguments which are file name and file mode. The fopen() function returns a file pointer which references the file and can be used to read file's contents.

The process of reading a file can be summarized as following:

fopen()
Open the file

filesize()
Get the file's length

fread()
Read the contents of the file

close()
Close the file
