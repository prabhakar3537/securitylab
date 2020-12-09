#include <stdio.h>
#include <string.h>
#define MAX 15 
int main(void)
{
struct {
char buff[5];
int pass;
}key;
key.pass=0;
printf("\n Enter the password : \n");
fgets(key.buff, sizeof(key.buff), stdin); //prevention
//gets(key.buff); //attack
if(strcmp(key.buff, "test"))    
{
printf ("\n Wrong Password \n");
}
else
{
printf ("\n Correct Password \n");
key.pass = 1;
}

if(key.pass)
{
printf ("\n Root privileges given to the user \n");
}
else
{
    printf("No access for you :)");
}

} 