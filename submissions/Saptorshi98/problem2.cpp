#include<stdio.h>

int main()
{
 int n,c,i,j,s[200],k,a;
 scanf("%d",&*n);
 scanf("%d",&c);
 scanf("%d",&i);
 for(a=0;a<n;a++)
 {
  for(j=0;j<i;j++)
 {
  scanf("%d",s[j]);
 }
 for(j=0;j<200;j++)
 {
  for(k=1;k<200;k++)
  {
   if(s[j]+s[k]==c)
   {
    if(j<k)
    {
    printf("%d  %d ",j+1,k+1);
    }
    if(k<j)
    {
     printf("%d  %d ",k+1,j+1);
    }
    else
    {
     printf("NA");
    }
   }
  }
 }
 }
 getch();
 return 0;
}
