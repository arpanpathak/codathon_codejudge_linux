// Devu & Interview -> Easy
// 1s - Java
import java.io.*;
import java.util.*;
import java.math.*;

class problem2 {
    public static void main(String args[])throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        int t = Integer.parseInt(br.readLine());
		while(t-- > 0) {
		    long n = Long.parseLong(br.readLine());
		    if(n==1) {
                System.out.println(1);
                continue;
            }
            System.out.println(factors(n));
		}
    } 
    public static long factors(long n) {
        int max = (int)Math.sqrt(n);
        long sum = 1 + n;
        for(int i = 2; i <= max; i++) {
            if(n % i == 0) {
                sum += i;
                int x = (int)n/i;
                if(x != i)
                    sum += x;
            }
        }
        return sum;
    }
}