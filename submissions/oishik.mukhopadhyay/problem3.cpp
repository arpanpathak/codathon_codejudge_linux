#include<iostream>
using namespace std;

struct robot
{
    int x=0,y=0;
    void pos(int n)
    {
        int i, dir;
        for(i=1;i<=n;i++)
        {
            dir=i%4;
            if(dir==0)   //Down
            {
                y-=(i);
            }
            else if(dir==3) //Left
            {
                x-=(i);
            }
            else if(dir==2)  //Up
            {
                y+=(i);
            }
            else    //Right
            {
                x+=(i);
            }
        }
    }
    void rout()
    {
        cout<<x<<' '<<y<<endl;
    }
} r[100];

int main()
{
    int T;
    int N[101];
    cin>>T;
    register int i;
    for(i=0;i<T;i++)
    {
        cin>>N[i];
    }
    for(i=0;i<T;i++)
    {
        r[i].pos(N[i]);
        r[i].rout();
    }
    return 0;
}

