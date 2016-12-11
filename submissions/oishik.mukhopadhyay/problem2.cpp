#include<stdio.h>
using namespace std;

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
      printf("%d %d\n",x,y);
      x=0;y=0;
    }


int main()
{
    int T;
    int N[101];
    //cin>>T;
  	scanf("%d",&T);
    register int i;
    for(i=0;i<T;i++)
    {
        //cin>>N[i];
      scanf("%d",&N[i]);
    }
    for(i=0;i<T;i++)
    {
        pos(N[i]);
        
    }
    return 0;
}



