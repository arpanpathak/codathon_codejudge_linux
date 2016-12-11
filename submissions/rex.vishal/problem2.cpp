#include <iostream>
using namespace std;
int main()
{
    int N,i;
    int x=0,y=0,cntx=0,cnty=0;
    cout<<"Enter the number of turns for the Robot: "; cin>>N;
    if (N%2==1)
    {
    for (i=1;i<=N;i=i+2)
    {
        cntx++;
        if(cntx%2==1)
            x=x+i;
        else if(cntx%2==0)
            x=x-i;
    }
            for (i=2;i<=N;i=i+2)
    {
        cnty++;
        if(cnty%2==1)
            y=y+i;
        else if(cnty%2==0)
            y=y-i;
    }
    }
    else if(N%2==0)
    {
        for (i=1;i<=N;i=i+2)
    {
        cntx++;
        if(cntx%2==1)
            x=x+i;
        else if(cntx%2==0)
            x=x-i;
    }

        for (i=2;i<=N;i=i+2)
    {
        cnty++;
        if(cnty%2==1)
            y=y+i;
        else if(cnty%2==0)
            y=y-i;
    }
    }
    cout<<"\n\nPosition of Robot: \n\t"<<x<<" "<<y;
    return 0;
}
