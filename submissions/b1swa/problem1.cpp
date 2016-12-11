#include<iostream>
using namespace std;
int main()
{
int N,i,j=0,z=1,num=0,flag=0;
char c;
cin>>N;
while(z)
{
    cin>>c;

    if(flag=1)
    {


        if(c=='1'||c=='2'||c=='3'||c=='4'||c=='5'||c=='6'||c=='7'||c=='8'||c=='9')
            num=(((int)c)*10)+num;

    else if (c=' ')
    {
    }
    else
        flag=0;
    }
         if(c=='$')
            flag=1;
        if(c=='\n')
            cout<<num<<endl;
return 0;
}
}
