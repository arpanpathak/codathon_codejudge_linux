#include<stdio.h>
main()
{int i=1,t,n;
int x=0,y=0;
printf("\n enter the number of cases");
scanf("%d",&t);
while(i<=t)
{
printf("\n(%d,%d)",x+1,y);
i++;
if(i==2)
y=y+2;
else if(i==3)
x=x-3;
else if(i==4)
y=y-4;

}
return(0);
}