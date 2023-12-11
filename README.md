# CS166FinalProj
ARP Poisoning and DNS Spoof
By: Shivam Amin, Ravi Gadgil, Vincent Nguyen, Brian Pham, and William Tran

## Files

1. **index.html**
   - The main HTML file that includes a form for user input.
   - Users can input their name and email, and the form data will be submitted using the POST method.

2. **error.html**
   - An HTML file that serves as an error page.
   - Users will be redirected to this page after submission.

3. **process_form.php**
   - A PHP script responsible for processing the form submission from index.html.
   - It collects the user's name and email, formats the data, and appends it to a text file named form_data.txt.
   - The user is redirected to the error page (error.html).
  
4. **etter.dns**
   - Configure etter.dns to map Yahoo.com to my apache2 server ip which is also the ip for the kali linux server
  
5. **form_data.txt**
   - File that the passwords will be appended to
  
## Usage
Steps:
1.  Download Kali Linux
2.  Set up Kali Linux
3.  Use pip to download apache2
4.  Use index.html as your home page for apache2 server
5.  Use process_form.php and error.html files to make your apache server work
6.  Update etter.dns and etter.conf with the files in the repo
7.  Run the command sudo ettercap -G
8.  Add the hosts
9.  Start a MiTM attack
10. Start DNS spoofing plugin
11. Test it out.
