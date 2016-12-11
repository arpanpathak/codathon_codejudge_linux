#include<iostream>
#include<math.h>
using namespace std;
int main()
{
 int t;
 cin>>t;
 cout<<endl;
 long unsigned int a[2][t],v[t];
 long double m[t];
 for(int i=0;i<t;i++)
  {
    for(int k=0;k<2;k++)
    cin>>a[k][i];
   cout<<endl;
  }
for(int j=0;j<t;j++)
  {
   m[j]=pow(a[0][j],a[1][j]);
   v[j]=m[j]/10;
   v[j]*=10;
   cout<<m[j]-v[j]<<endl;
  }
 return 0;
}
