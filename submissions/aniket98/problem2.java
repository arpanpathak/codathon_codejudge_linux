#include <iostream>
using namespace std;
int main()
{
    int N[100],T,i,x=0,y=0;
    do{cin>>T;}
    while(T<1&&T>100);
    for(i=0;i<T;i++)
    {
     do{cin>>N[i];}
     while(N[i]<1&&N[i]>1000000000);
    }
    for(i=0;i<T;i++)
    {
     if(N[i]%4==1)
     {x=x+N[i];y=y+0;}
     if(N[i]%4==2)
     {x=x+0;y=y+N[i];}
     if(N[i]%4==3)
     {x=x-N[i];y=y+0;}
     if(N[i]%4==0)
     {x=x+0;y=y-N[i];}
     cout<<x<<y;
    }
    return 0;
}
