import java.rmi.*;
public interface Inter extends Remote
{
	
	public String purchase(int choice,int quant[]) throws RemoteException;
	public String cancelitems(int c1,int n1[],int qty1[]) throws RemoteException;
	public String[] orderDetails() throws RemoteException;
	public int[] show() throws RemoteException;
	public int[] getPrice() throws RemoteException;
	
}
