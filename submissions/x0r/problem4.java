import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.StringTokenizer;
import java.util.ArrayList;
import static java.lang.System.out;

public class problem4 {
	private static BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
	public static void main(String[] args) throws Exception {
		while (true) {
			int c = Integer.parseInt(br.readLine());
			if ( c == 0) break;
			String s = br.readLine().trim();
			int r = s.length() / c;
			boolean o = false;
			ArrayList<String> v = new ArrayList<>();
			for (int i = 0; r-- > 0; i += c, o = !o) {
				String tmp = s.substring(i, i+c);
				if (o) {
					v.add(new StringBuffer(tmp).reverse().toString());
				} else {
					v.add(tmp);
				}
			}
			for (int i = 0; i < c; ++i) {
				for (String k: v) System.out.print(k.charAt(i));
			}
			System.out.println();
		}
	}
}