#include<iostream>
#include<math.h>
#include<stdio.h>

using namespace std;

int main()
{
    char x[5][100];
    for(int i=0;i<5;i++)
    {
        gets(x[i]);
    }


    for(int i=0;i<5;i++)
    {
        int p1=0;
    while(x[i][p1]!='$')
   {
       p1++;
   }
    int p2=p1+1;
   while((int)x[i][p2]>=48&&(int)x[i][p2]<=57)
    p2++;
   p2--;

   int sum=0,m=0;
    while(p1!=p2)
    {
        sum=sum+((((int)x[i][p2])-48)*pow(10,m));
        m++;
        p2--;
    }
    cout<<sum<<endl;
    }
}
