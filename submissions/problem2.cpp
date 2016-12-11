#include <iostream>

using namespace std;

int main()
{
    int n;
    cin>>n;
    for(int i=1;i<=n;i++)
    {
        int item,credit,m=0;
        cin>>credit;
        cin>>item;
        int price[item];
        int ans[2*credit];
        for(int j=0;j<item;j++)
            cin>>price[j];
        for(int j=0;j<item;j++)
        {
            for(int k=0;k<item;k++)
            {
                if(j!=k)
                {
                    if(price[j]+price[k]==credit)
                    {
                        ans[m++]=j+1;
                        ans[m++]=k+1;
                    }
                }
            }
        }
        for(int i=0;i<2*credit;i=i+2)
        {
            cout<<ans[i]<<" "<<ans[i+1]<<"\n";
        }
    }
    return 0;
}
