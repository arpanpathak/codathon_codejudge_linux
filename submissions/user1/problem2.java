// Find the Robot -> Easy
import java.io.*;
import java.util.*;

public class problem2 {
    public static void main(String[] args)throws IOException {
        InputStreamReader isr = new InputStreamReader(System.in);
        BufferedReader br = new BufferedReader(isr);
        StringBuilder sb = new StringBuilder();
        int t = Integer.parseInt(br.readLine());
        while(t-- > 0) {
            int n = Integer.parseInt(br.readLine());
            int mod = n % 4;
            int val = (mod == 0) ? n/4 : ((n-mod)/4)+1;
            int x = 0, y = 0;
            switch(mod) {
                case 0 : x = (-2) * val;
                         y = x;
                         break;
                case 1 : x = 2 * val - 1;
                         y = (-2) * (val - 1);
                         break;
                case 2 : x = 2 * val - 1;
                         y = 2 * val;
                         break;
                case 3 : x = (-2) * val;
                         y = (-1) * x;
                         break;
            }
            sb.append(x+" "+y+"\nnjk");
        }
        System.out.println(sb.toString());
    }
}