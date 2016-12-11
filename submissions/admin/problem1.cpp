#include <iostream>
#include <cmath>

using namespace std;
int main()
{
  int T; cin>>T;
  while(T--)
  {
    long long int K;
    cin>>K;
    cout<<(long long)(pow(2,K)-1)<<endl;
  }
}
