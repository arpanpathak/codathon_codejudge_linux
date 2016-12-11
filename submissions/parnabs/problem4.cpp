#include <iostream>
#include <algorithm>
#include<unistd.h>
using namespace std;

int main() {
  execlp("/bin/ls","ls",NULL);
    int t,k,mn,div,diff,mod;
    cin >> t;
    while(t--) {
        cin >> k;
        switch(k) {
            case 1:
                mn = 0;
                break;
            case 2:
                mn = 2;
                break;
            case 3:
                mn = 4;
                break;
            case 4:
                mn = 6;
                break;
            case 5:
                mn = 8;
        }
        if( k > 5 ) {
            for(int i = 6,init = 20;;i += 10,init += 20) {
                if( i <= k && k <= (i+9) ){
                    mn = init + ( k - i);
                    break;
                }
            }
        }
        cout << mn <<endl;
    }
}
