#include<iostream>
#include<vector>
#include<algorithm>
#include<math.h>

using namespace std;

int main()
{
    int N,C,I;
    cin >> N;
    for(int i=0; i<N;i++){
        int a,b;
        vector <int> number;
        long long int c;
        cin >>a >> b;
        c = pow(a,b);
        while(c%10 >=10){
            c /=10;
        }
        cout << (c%10);
    }
    return 0;
}
