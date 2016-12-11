#include <iostream>
#include <algorithm>
using namespace std;

int main() {
    int t,n;
    cin >> t;
    while(t--) {
        cin >> n;
        if ( n == 1)
            cout << n;
        else if ( n == 2)
            cout << n + 1;
        else if ( n % 2 == 0 )
            cout << n + 2;
        else
            cout << n + 1;
        cout << endl;
    }
}
