// Detective & Hiring Event -> Medium
// 3s - Java
import java.util.*;
import java.io.*;
 
class problem4 {
	public static void main (String[] args) throws java.lang.Exception {
		BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
		int t = Integer.parseInt(br.readLine());
		int res[] = {0, 2, 4, 6, 8};
		while(t-- > 0) {
		    StringBuilder sb = new StringBuilder();
		    long k = Long.parseLong(br.readLine());
		    if(k == 1) {
		        System.out.println(res[0]);
		        continue;
		    }
		    k--;
		    while(k > 0) {
		        int d = (int)(k % 5);
		        sb.append(res[d]);
		        k = k / 5;
		    }
		    sb.reverse();
		    System.out.println(sb.toString());
		}
	}
} 