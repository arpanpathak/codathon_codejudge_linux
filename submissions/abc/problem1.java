// Easy -> Playing with Bits
import java.io.*;
import java.util.*;
public class problem1 {
    public static void main(String[] args)throws IOException {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        int t = Integer.parseInt(br.readLine());
		while(t-- > 0) {
            int n = Integer.parseInt(br.readLine());
            long ans = (long)Math.pow(2, n) - 1;
            System.out.println(ans);
		}
    } 
}
