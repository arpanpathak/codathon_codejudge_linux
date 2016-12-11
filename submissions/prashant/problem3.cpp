#include <iostream>
#include <stdio.h>
#include <math.h>
using namespace std;

int   j, n;
int res, a[100], b[100];

int main()
{

    cin>>n;
    for(j=0; j< n; j++){
        cin>>a[j];
        cin>>b[j];
    }
    for(j=0; j< n; j++){
        res = pow(a[j], b[j]);
        cout<<res%100;
        cout<<endl;
    }
    return 0;
}
