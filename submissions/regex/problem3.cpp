/*
    @author : x0r
*/
#include <bits/stdc++.h>
#define gcd __gcd

using namespace std;

int main() {
    int t;
    int a, b;
    ios::sync_with_stdio(false);
    cin >> t;
    while (t--) {
        cin >> a >> b;
        if (b == 0) {
            cout << 1 << endl;
            continue;
        }
        if (gcd(a, 10) == 1) {
            // euler
            int v = a % 10;
            switch (b % 4) {
                case 0: cout << 1 << endl; break;
                case 1: cout << v << endl; break;
                case 2: cout << (v*v) % 10 << endl; break;
                case 3: cout << (v*v*v) % 10 << endl; break;
            }
        } else {
            switch (a % 10) {
            case 0: cout << 0 << endl; break;
            case 2:
                switch ((b-1) % 4) {
                case 0:
                    cout << 2 << endl;
                    break;
                case 1:
                    cout << 4 << endl;
                    break;
                case 2:
                    cout << 8 << endl;
                    break;
                case 3:
                    cout << 6 << endl;
                    break;
                }
                break;
            case 4:
                switch((b-1) % 2) {
                    case 0: cout << 4 << endl; break;
                    case 1: cout << 6 << endl; break;
                }
                break;
            case 5:
                cout << 5 << endl; break;
            case 6:
                cout << 6 << endl; break;
            case 8:
                switch ((b-1) % 4) {
                    case 0: cout << 8 << endl; break;
                    case 1: cout << 4 << endl; break;
                    case 2: cout << 2 << endl; break;
                    case 3: cout << 6 << endl; break;
                }
            }
        }
    }
    return 0;
}