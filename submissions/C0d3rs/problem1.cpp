#include <bits/stdc++.h>

using namespace std;

int main() {
    int t, k;
    cin >> t;
    while (t--) {
        cin >> k;
        if (k == 0) {
            cout << "0\n";
            continue;
        }
        //string s = "1";
        //for (;--k;) s += "1";
        unsigned long long v = 0;
        for (int i = 0; i < k; ++i) {
            v = (v << 1) + 1;
        }
        cout << v << "\n";
        // cout << strtoull(s.c_str(), NULL, 2) << "\n";
    }
    return 0;
}
