#include<iostream>
#include<math.h>
using namespace std;
int SumDivs(int n)
{
   int sum = 1;
   double m = sqrt(n);
   for (int i = 2; i <= m; i++)
      if(n % i == 0) sum += (i + n / i);
   return sum;
}
int main()
{
 int a;
 cin>>a;
 long int s[a];
 for(int k=0;k<a;k++)
 {
    cin>>s[k];
  cout<<SumDivs(s[k])+s[k]<<endl;
 }


 return 0;
}
