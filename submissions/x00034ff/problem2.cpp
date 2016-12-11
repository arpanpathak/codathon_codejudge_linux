#include <iostream>
#include <math.h>
using namespace std;
int main()
{
  int T; cin>>T;
  while(T--)
  {
    long long int K,sum=0;
    cin>>K;
    for(long long int i=1;i<=(long long int)(sqrt(K));i++)
    {
        if(K%i==0) sum+=i;
    } sum=sum+1+K;
    cout<<sum<<endl;
  }
}
